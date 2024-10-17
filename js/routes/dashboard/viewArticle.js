import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js";
import { GetSubmissionData } from "../queries/getSubmissionData.js";
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"
import { GetKeywords } from "../queries/getKeywords.js";


const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const user = GetCookie("editor")
if(user){
const AccountData = await validateLogin(user)


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

userFullnameContainer.forEach(container =>{
    container.innerText= userFullname
})
const ArticleId = GetParameters(window.location.href).get("a")
const ArticlesContainer = document.getElementById("articlesContainer")

if(ArticleId){
   const ArticleData = await GetSubmissionData(ArticleId)

   if(ArticleData){
    let AuthorsList = ""
       const unstructuredAbstract = ArticleData.abstract
       
       if (ArticleData.document_file !== "dummy.pdf") {
           var documentFile = ArticleData.document_file;
       }


   ArticlesContainer.innerHTML = `     <!-- Section  -->
                                        <div class="d-md-flex mb-3" style="flex-direction: column;">
                                        <h3 class="box-title mb-0">Title</h3>
                                        <div>${ArticleData.title}</div>
                                    </div>
                                    <!-- End Section  -->
                                                       <!-- Section  -->
                                    <div class="d-md-flex mb-3" style="flex-direction: column;">
                                        <h3 class="box-title mb-0">Discipline</h3>
                                       <div>${ArticleData.discipline}</div>
                                    </div>
                                    <!-- End Section  -->
                                                 <!-- Section  -->
                                    <div class="d-md-flex mb-3" style="flex-direction: column;">
                                        <h3 class="box-title mb-0">Article Type</h3>
                                       <div>${ArticleData.article_type}</div>
                                    </div>
                                    <!-- End Section  -->
                                     
                                    <!-- Section  -->
                                    <div class="d-md-flex mb-3" style="flex-direction: column;">
                                        <h3 class="box-title mb-0">Abstract</h3>
                                        <div id="content" class="ql-editor"></div> 
                                    </div>
                                    <!-- End Section  -->
                                    <!-- Section  -->
                                    <div class="d-md-flex mb-3">
                                        <h3 class="box-title mb-0">Files</h3>
                                       <ul>
                                        <li>Cover Letter: <a href="${submissionsEndpoint}/uploadedFiles/${ArticleData.cover_letter_file}">${ArticleData.cover_letter_file}</a></li>
                                        <li>Manuscript File: <a href="${submissionsEndpoint}/uploadedFiles/${ArticleData.manuscript_file}">${ArticleData.manuscript_file}</a></li>
                                        <li>Document File: <a href="${submissionsEndpoint}/uploadedFiles/${documentFile}">${documentFile}</a></li>

                                       </ul>
                                    </div>
                                    <!-- End Section  -->
                                        <!-- Section  -->
                                    <div class="d-md-flex mb-3">
                                        <h3 class="box-title mb-0">Authors</h3>
                                    
                                       <table class="projects-table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th> 
                                                    <th>ORCID-ID</th> 
                                                    <th>Affiliation</th> 
                                                    <th>Afffiliation City</th> 
                                                    <th>Afffiliation Country</th> 
                                                    <th>Email</th> 
                                                    <th>ASFI Membership ID</th> 
                                                </tr>

                                            </thead>
                                            <tbody id="authorsContainer">

                                        
                  
                                        </tbody>
                                       
                                        </table>
                                    
                                    </div>

                                    <div class="d-md-flex mb-3">
                                        <h3 class="box-title mb-0">Keywords</h3>
                                        
                                    <ul>
                                        <li>
                                       <p id="keywordsContainer">
                                    
                                       </p>
                                       </li>
                                    </ul>
                                    
                                    </div>


                                    <!-- End Section  -->
                              `;
 

                    // Parse the Quill content from the JSON data
                    const quillContent = JSON.parse(unstructuredAbstract);

                    // Create a Quill instance in "read-only" mode to render the content as HTML
                    const contentDiv = document.getElementById('content');

                    function renderQuillAsHTML(divId, deltaContent) {
                        // Create a Quill instance in a temporary div
                        const tempDiv = document.createElement('div');
                        const quill = new Quill(tempDiv, {
                            theme: 'snow',
                            modules: { toolbar: false },
                            readOnly: true,
                        });

                        // Set the content as Quill Delta and extract the HTML
                        quill.setContents(deltaContent);

                        // Get the innerHTML from the Quill editor
                        const htmlContent = tempDiv.innerHTML;

                        // Render the extracted HTML into the specified div
                        contentDiv.innerHTML = htmlContent;
                    }

                    // Render the Quill content as HTML in the "content" div
                    renderQuillAsHTML('content', quillContent);
                    const AuthorsContainer = document.getElementById("authorsContainer")
            fetch(`${submissionsEndpoint}/backend/accounts/articleAuthors.php?articleID=${ArticleId}`, {
                method: "GET"
            }).then(res => res.json())
                .then(data => {
                    
                    if (data) {
                        const AllAuthors = data.authorsList
                        AllAuthors.forEach(author => {
                            AuthorsContainer.innerHTML += `<tr>
                            <td>${author.authors_fullname}</td>
                            <td>${author.orcid_id}</td>
                            <td>${author.affiliations}</td>
                            <td>${author.affiliation_city}</td>
                            <td>${author.affiliation_country}</td>
                            <td><a href="mailto:${author.authors_email}">${author.authors_email}</a></td>
                            <td>${author.asfi_membership_id}</td>
                            </tr>`;
                        });

                    } else {
                        console.log("Server Error")
                    }

                
                })
            }
            }

            const keywordsContainer = document.getElementById("keywordsContainer");
            const keywords = await GetKeywords(ArticleId)
            for(let i=0; i<keywords.length;i++){
                if(i === (keywords.length - 1)){
                    keywordsContainer.innerHTML += `${keywords[i].keyword}`
                }else{
                    keywordsContainer.innerHTML += `${keywords[i].keyword}, `
                }
            }

            const suggestedReviewersContainer = document.getElementById("suggestedReviewersContainer")

            fetch(`${submissionsEndpoint}/backend/accounts/suggestedReviewers.php?articleID=${ArticleId}`, {
                method:"GET"
            }).then(res=>res.json())
            .then(data=>{
                if(data){
                    const ReviewersList = data.suggestedReviewers

                    ReviewersList.forEach(reviewer =>{
                        suggestedReviewersContainer.innerHTML += `
                        <tr>
                           <td><p><b>${reviewer.fullname}</b></p>
                           <p>${reviewer.email}</p>
                           </td>
                                    
                           <td>${reviewer.affiliation}</td>   
                           <td>${reviewer.affiliation_country}</td>
                           <td>${reviewer.affiliation_city}</td>    
                       </tr>
                       `
                    })
              

                }else{
                    console.log("Could not Get Suggested Reviewers")
                }
            })
     

}else{
    window.location.href = `${parentDirectoryName}/workflow/accounts/login`
}


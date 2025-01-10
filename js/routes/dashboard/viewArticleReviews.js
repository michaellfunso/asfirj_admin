import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js";
import { GetSubmissionData } from "../queries/getSubmissionData.js";
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"
import { getAuthorsDetails } from "./emails/getAuthorsDetails.js";

const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const user = GetCookie("editor")
if(user){
const AccountData = await validateLogin(user)


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

const ArticleId = GetParameters(window.location.href).get("a")
const ReviewsContaienr = document.getElementById('reviewsContainer')

if(ArticleId){
   const ArticleData = await GetSubmissionData(ArticleId)
//    Get the Reveiws for the ARticles 
// First Get the list of review invitaions sent 
fetch(`${submissionsEndpoint}/backend/editors/articleinvitations.php`,{
    method:"POST",
    body:JSON.stringify({article_id:ArticleId})
}).then(res =>res.json())
.then(data=>{
    if(data.success){
        const ReviewInviteList = data.reviews 
    // let ReviewerName = ""
        // ReviewInviteList.forEach(async review =>{
        //    ReviewerName = await getAuthorsDetails(user, review.reviewer_email)

        // })

        ReviewInviteList.forEach( review => {
             let ReviewStatus = ""
            let ReviewAction = ""
            const ReviewerName  = review.reviewer_email

            console.log(review)
            if(review.status === "review_submitted"){
                ReviewStatus = ` <td class="status">
                                    <span class="status-text status-green">Review Submitted</span>
                                 </td>`
                ReviewAction = ` <td>
                                    <form class="form" action="#" >
                                    <input type="hidden" name="a" value=${ArticleId} readonly/>
                                    <input type="hidden" name="r" value=${review.reviewer_email} readonly/>

                                    <select class="action-box">
                                        <option>Actions</option>
                                        <option>View</option>
                                    </select>
                                    </form>
                                </td>`
            }else    if(review.status === "submitted_for_review"){
                ReviewStatus = ` <td class="status">
                                      <span class="status-text status-orange">Awaiting Reviewer's Response</span>
                                    </td>`
                ReviewAction = ``
            }else if(review.status === "review_request_rejected" || review.status === "invitation_rejected"){
                ReviewStatus = ` <td class="status">
                                   <span class="status-text status-red">Invitation Rejected</span>
                                </td>`
                ReviewAction = ``

            }
            else if(review.status === "review_invitation_accepted"){
                ReviewStatus = ` <td class="status">
                                  <span class="status-text status-green">Review Invitation Accepted</span>
                             </td>`
                             ReviewAction = ` <td>
                             <form class="form" action="#" >
                                  <input type="hidden" name="a" value=${ArticleId} readonly/>
                                    <input type="hidden" name="r" value=${review.reviewer_email} readonly/>
                             <select class="action-box" name="reviewAction">
                                 <option>Actions</option>
                                 <option value="viewReview">View</option>
                             </select>
                             </form>
                         </td>`
            }
            ReviewsContaienr.innerHTML += `   <tr>
                                                            <td>
                                                              ${ReviewerName}
                                                            </td>
                                                        
                                                          <td>
                                                              <p>${formatTimestamp(review.date_submitted)}</p>
                                                          </td>
                                              
                                                           ${ReviewStatus}
                                                           ${ReviewAction}
                                                        </tr> `

            
        });
        const formContainer = document.querySelectorAll('.form')
        // Each input fields in the form 
        const Select = document.querySelectorAll("select")
        
        
        Select.forEach((action, index)=>{
            action.addEventListener("change", function(){
                if(action.value !== ""){
                formContainer[index].submit()
                }
            })
        })

        const ArticleIdMain = GetParameters(window.location.href).get("a")
        const reviewerEmailMain = GetParameters(window.location.href).get("r")
        
        if(reviewerEmailMain && ArticleIdMain){
            // if(action !== "" && ArticleId != ""){
            // if(action === "view" ){
        
            window.location.href = `${parentDirectoryName}/Reviews?a=${ArticleIdMain}&r=${reviewerEmailMain}`
            // }
          
        // }
    } 
    }else{
        ReviewsContaienr.innerHTML = `<tr><td>${data.error}</td></tr>`
    }

})
}
}
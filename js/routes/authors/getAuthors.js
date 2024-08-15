import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js"
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"

const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const AuthorsContainer = document.getElementById("AuthorsContainer")
const view = GetParameters(window.location.href).get("view")
const user = GetCookie("editor")
if(user){
const AccountData = await validateLogin(user)


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

userFullnameContainer.forEach(container =>{
    container.innerText= userFullname
})

let SubmisisonsArray = []
let Authorstatus = ""
let adminAction = ""
let tableRowClass = ""
let AuthorsEmail = ""

if(accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant"){
    fetch(`${submissionsEndpoint}/backend/editors/authorsList.php?u_id=${user}`, {

    }).then(res=>res.json())
    .then(data=>{
        if(data){
            const AuthorsList = data.authorsList
            if(AuthorsList.length > 0){
                AuthorsList.forEach(author =>{
                    const AccountStatus = author.account_status
                    let StatusColor = ""
                    if(AccountStatus === 'verified'){
                        StatusColor = "status-green"
                    }else{
                        StatusColor = "status-orange"
                    }

                    AuthorsEmail = author.email 

                    AuthorsContainer.innerHTML += `       
                                              <tr>
                                                  <td>
                                                     ${author.prefix}
                                                  </td>
                                                  <td>
                                                      <p>${author.firstname} ${author.othername}</p>
                                                      
                                                  </td>
                                                  <td>
                                                    <p>${author.lastname}</p>
                                                    
                                                </td>
                                                <td>
                                                    <p>${author.affiliations}</p> 
                                                    <p> ${author.affiliation_city}, ${author.affiliation_country}</p>                                                   
                                                </td>
                                                <td>
                                                    <p>${formatTimestamp(author.date_joined)}</p>
                                                </td>
                                    
                                                  <td class="status">
                                                      <span class="status-text ${StatusColor}">${AccountStatus}</span>
                                                  </td>
                                                  <td>
                                                      <form class="form">
                                                      <select name="view" class="action-box">
                                                          <option>Actions</option>
                                                          <option value=${author.email}>View Profile</option>
                                                          
                                                      </select>
                                                      </form>
                                                  </td>
                                              </tr> 
                    `
                })
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
            }else{
                AuthorsContainer.innerHTML = `<tr><td>There are No Authors Available on the platform yet </td></tr>`
            }
            
        }
    })
    if(view && view != ""){
        window.location.href = `${parentDirectoryName}/Profile?e=${view}`
    }
}
}else{
    window.location.href = `${parentDirectoryName}/workflow/accounts/login`
}

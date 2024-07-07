import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js"
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"
import { GetEmailContent } from "./getEmails.js"

const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const emailListContainer = document.getElementById("emailListContainer")
const user = GetCookie("editor")
if(user){
const AccountData = await validateLogin(user)


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

userFullnameContainer.forEach(container =>{
    container.innerText= userFullname
})

function showEmailContent(emailId) {
   
    const emailContentContainer = document.getElementById("email-content");
    emailContentContainer.innerHTML = ``
    GetEmailContent(emailId)

}
// Get Emails Related to the user 
fetch(`${submissionsEndpoint}/backend/editors/emailList.php?u_id=${user}`, {

}).then(res=>res.json())
.then(data=>{
    if(data){
        if(data.emails){
            const EmailList = data.emails 
            EmailList.forEach(email =>{
                emailListContainer.innerHTML += `
                <div class="email-item" data-id=${email.id} >
                      <div class="email-subject">${email.subject}</div>
                      <div class="email-recipient">${email.recipient}</div>
                    </div>`
            })
        }else{
            emailListContainer.innerHTML = `<b>No Email Has been sent yet From ${email}</b>`
        }
    }

    // Initial content display (optional)
      const Emailitems = document.querySelectorAll(".email-item")
    Emailitems.forEach(item=>{
        item.addEventListener("click", function(){
            showEmailContent(item.getAttribute("data-id"))
        })
    })
 
})


}else{
    window.location.href = `${parentDirectoryName}/Dashboard`
}

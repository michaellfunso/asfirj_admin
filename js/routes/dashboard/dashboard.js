import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js"
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"
import { GetAdminSubmissions } from "./getAdminSubmissions.js"
import { GetMySubmissions } from "./getMySubmissions.js"

const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const submissionsContainer = document.getElementById("submissionsContainer")
const authorsCount = document.querySelectorAll(".authorsCount")
const reviewedCount = document.querySelectorAll(".reviewedCount")

const SubmissionsCount = document.querySelectorAll(".submissionsCount")
const user = GetCookie("editor")
if(user){

if(SubmissionsCount){
    fetch(`${submissionsEndpoint}/backend/editors/countSubmissions.php?u_id=${user}`)
    .then(res => res.json())
    .then(data=>{
        SubmissionsCount.forEach(count =>{
            count.innerText = data.count
        })
    })
   
}

if(authorsCount){
    fetch(`${submissionsEndpoint}/backend/editors/countAuthors.php?u_id=${user}`)
    .then(res => res.json())
    .then(data=>{
        authorsCount.forEach(count =>{
            count.innerText = data.count
        })
    })
}

if(reviewedCount){
    fetch(`${submissionsEndpoint}/backend/editors/countReviewed.php?u_id=${user}`)
    .then(res => res.json())
    .then(data=>{
        reviewedCount.forEach(count =>{
            count.innerText = data.count
        })
    })
}



const AccountData = await validateLogin(user)


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

userFullnameContainer.forEach(container =>{
    container.innerText= userFullname
})

let SubmisisonsArray = []
let submissionStatus = ""
let adminAction = ""
let tableRowClass = ""

if(accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant"){
    SubmisisonsArray = await GetAdminSubmissions(user)
    adminAction =  `<option value="return">Return</option>
                    <option value="return_for_revision">Return For Revision</option>
                    <option value="invite_reviewer">Invite Reviewer</option>
                    <option value="invite_editor">Invite Editor</option>
                    <option value="accept">Accept</option>
                    <option value="reject">Reject</option>

                    ` 
}else{
    SubmisisonsArray = await GetMySubmissions(user);
    adminAction =  `
    <option value="invite_reviewer">Invite Reviewer</option>
    <option value="return_for_revision">Return For Revision</option>
    <option value="accept">Accept</option>
    <option value="reject">Reject</option>

    `
}
if(SubmisisonsArray.length > 0){
SubmisisonsArray.forEach(submission =>{
    if(submission.status === "submitted_for_review"){
        submissionStatus = `<td class="status">
                                                <span class="status-text status-orange">Awaiting to be Reviewed</span>
                                            </td>
                                            <td>
                                                <form class="form" action="#">
                                                <input type="hidden" value="${submission.revision_id}" name="id">
                                                <select class="action-box" name="do">
                                                    <option value="">Actions</option>
                                                    <option value="view">View</option>
                                                    <option value="edit">Edit</option>
                                                    ${adminAction}
                                                </select>
                                                
                                                </form>
                                            </td>`
        tableRowClass = ""

    }else if(submission.status === "submitted_for_edit"){
        submissionStatus = `<td class="status">
        <span class="status-text status-orange">Awaiting to be Edited</span>
    </td>
    <td>
        <form class="form" action="#">
        <input type="hidden" value="${submission.revision_id}" name="id">
        <select class="action-box" name="do">
            <option value="">Actions</option>
            <option value="view">View</option>
            <option value="edit">Edit</option>
            ${adminAction}
        </select>
        
        </form>
    </td>`
tableRowClass = ""
    }
    else if(submission.status === "returned_for_revision"){
        submissionStatus = `   <td class="status">
                                                <span class="status-text status-orange">Returned For Revision</span>
                                            </td>
                                            <td>
                                                <form class="form" action="#" method="GET">
                                          <input type="hidden" value="${submission.revision_id}" name="id">
                                                   <select class="action-box" name="do">
                                                    <option value="">Actions</option>
                                                    <option value="view">View</option>
                                                    ${adminAction}
                                                </select>
                                                
                                                </form>
                                            </td>`
        tableRowClass = "danger-item"
    }    else if(submission.status === "rejected"){
        submissionStatus = `   <td class="status">
                                                <span class="status-text status-red">Rejected</span>
                                            </td>
                                            <td>
                                                <form class="form" action="#" method="GET">
                                          <input type="hidden" value="${submission.revision_id}" name="id">
                                                   <select class="action-box" name="do">
                                                    <option value="">Actions</option>
                                                    <option value="view">View</option>
                                                    ${adminAction}
                                                </select>
                                                
                                                </form>
                                            </td>`
        tableRowClass = "danger-item"
    }else if(submission.status === "accepted"){
        submissionStatus = `   <td class="status">
                                                <span class="status-text status-green">Accepted</span>
                                            </td>
                                            <td>
                                          <form class="form" action="#" method="GET">
                                           <input type="hidden" value="${submission.revision_id}" name="id">
                                                   <select class="action-box" name="do">
                                                    <option value="">Actions</option>
                                                    <option value="view">View</option>
                                                    ${adminAction}
                                                </select>
                                                
                                                </form>
                                            </td>`
        tableRowClass = ""

    }else if(submission.status === "review_submitted" || submission.status === "submitted" || submission.status === "revision_submitted"){
        submissionStatus = `       <td class="status">
                                                <span class="status-text status-blue">Awaiting to be Published</span>
                                            </td>
                                            <td>
                                            <form class="form" action="#" method="GET">
                                                <input type="hidden" value="${submission.revision_id}" name="id">
                                               <select class="action-box" name="do">
                                                    <option value="">Actions</option>
                                                    <option value="view">View</option>
                                                    ${adminAction}
                                                </select>
                                                
                                                </form>
                                            </td>`
        tableRowClass = ""

    }
    submissionsContainer.innerHTML += `     <tr class="${tableRowClass}">
                                            <td>
                                                <p>Title</p>
                                                <p>${submission.title}</p>
                                    
                                            </td>
                                            <td>
                                                <p>${formatTimestamp(submission.date_submitted)}</p>
                                                <p class="text-danger">${submission.revision_id}</p>

                                            </td>
                              
                                           ${submissionStatus}
                                        </tr>`
})
}else{
    submissionsContainer.innerHTML = `<tr>
    <td>You have no manuscripts to Edit</td></tr>`
}


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



// Check for parameters when form is submitted and redirect to the appropriate page 
const ArticleId = GetParameters(window.location.href).get("id")
const action = GetParameters(window.location.href).get("do")

if(action && ArticleId){
    if(action !== "" && ArticleId != ""){
   if(action === "view" ){
    window.location.href = `${parentDirectoryName}/View?a=${ArticleId}`
   }
   if(action === "edit"){

   }

   if(action === "return" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant")){
    window.location.href = `${parentDirectoryName}/returnPaper?a=${ArticleId}`

   }

   if(action === "reject" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant"|| accoount_type === "editorial_assistant" || accoount_type === "sectional_editor" || accoount_type === "associate_editor")){
    window.location.href = `${parentDirectoryName}/rejectPaper?a=${ArticleId}`

   }

   if(action === "invite_reviewer" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant" || accoount_type === "sectional_editor" || accoount_type === "associate_editor")){
    window.location.href = `${parentDirectoryName}/InviteReviewer?a=${ArticleId}`
   }

   if(action === "return_for_revision" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant" || accoount_type === "sectional_editor" || accoount_type === "associate_editor")){
    window.location.href = `${parentDirectoryName}/revisePaper?a=${ArticleId}`
   }

   if(action === "invite_editor" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant" )){
    window.location.href = `${parentDirectoryName}/InviteEditor?a=${ArticleId}`
   }

   if(action === "accept" && (accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant" || accoount_type === "sectional_editor" || accoount_type === "associate_editor")){
    window.location.href = `${parentDirectoryName}/acceptPaper?a=${ArticleId}`

   }
}
}

}else{
    window.location.href = `${parentDirectoryName}/workflow/accounts/login`
}

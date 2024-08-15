import { GetParameters, parentDirectoryName, submissionsEndpoint } from "../constants.js"
import { formatTimestamp } from "../formatDate.js"
import { GetCookie } from "../setCookie.js"
import { validateLogin } from "../validateLogin.js"

const userFullnameContainer = document.querySelectorAll(".userFullnameContainer")
const ProfileContainer = document.getElementById("ProfileContainer")
const user = GetCookie("editor")
const encrypted = GetParameters(window.location.href).get("e")
if(user){
const AccountData = await validateLogin(user)

if(AccountData && encrypted){

const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

userFullnameContainer.forEach(container =>{
    container.innerText= userFullname
})

 
if(accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant"){
    fetch(`${submissionsEndpoint}/backend/editors/authorProfileDetails.php?&u_id=${user}&encrypted=${encrypted}`)
    .then(res=>res.json())
    .then(data=>{
        if(data){
            
            if(data.accountData){
                const authorDataArray = data.accountData
            ProfileContainer.innerHTML = `<div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Fullname</label>
                                        <div class="col-md-12 border-bottom p-0" id="fullnameContainer">
                                  ${authorDataArray.prefix} ${authorDataArray.firstname} ${authorDataArray.othername} ${authorDataArray.lastname}
                                            </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Affiliations</label>
                                        <div class="col-md-12 border-bottom p-0" id="affiliationContainer">
                                     <p>${authorDataArray.affiliations} </p>
                                     <p>${authorDataArray.affiliation_city}, ${authorDataArray.affiliation_country}</p>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0" id="emailContainer">
                                     ${authorDataArray.email}
                                            </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Discipline</label>
                                        <div class="col-md-12 border-bottom p-0" id="disciplineContainer">
                                            
                                        ${authorDataArray.discipline}
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Available For review</label>
                                        <div class="col-md-12 border-bottom p-0" id="availableForReview">
                                        ${authorDataArray.is_available_for_review}
                                                   
                                               
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Reviewer Account Status</label>
                                        <div class="col-md-12 border-bottom p-0" id="isReviewer">
                                        ${authorDataArray.is_reviewer}
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Account Status</label>
                                        <div class="col-md-12 border-bottom p-0" id="editorAccountStatus">
                                        ${authorDataArray.account_status}
                                        </div>

                                        <br>
                                        
                                    </div>
                                    
                             `
                    
        }else{
            alert("No Data Available")
        }
    }
    })
}
}else{
    window.location.href = `${parentDirectoryName}/workflow/accounts/login`
}
}else{
    window.location.href = `${parentDirectoryName}/Authors`
}



const deleteProfile = document.getElementById("deleteProfile");
const email = GetParameters(window.location.href).get("e")
deleteProfile.addEventListener("click", function(){
   const confirmDeletion =  prompt(`Are you sure you want to delete this profile? To confirm, type "${email}" to continue.`)

   console.log(confirmDeletion)

   if(confirmDeletion && confirmDeletion === email){
   fetch(`${submissionsEndpoint}/backend/editors/deleteAuthorAccount.php`, {
    method:"POST",
    body:JSON.stringify({id:email, admin:user}),
    headers: {
        "Content-type":"application/JSON"
    }

   }).then(res=>res.json())
   .then(data=>{
    if(data.success){
        alert("Account Deleted Successfully")
        window.location.href = `.${parentDirectoryName}/Dashboard`
    }else{
        alert(data.error)
    }
   })
}else{
    
}
})
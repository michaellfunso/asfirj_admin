import { submissionsEndpoint } from "../constants.js";

function GetAdminSubmissions(id){
   return fetch(`${submissionsEndpoint}/backend/editors/allSubmissions.php`, {
        method: "POST",
        body:JSON.stringify({admin_id:id}),
        headers:{
            "Content-type" : "application/JSON"
        }
    }).then(res=>res.json())
    .then(data=>{
        if(data.success){
            return data.submissions
        }else{
            console.log(data.error)
            return false
        }

    })
}


export {
    GetAdminSubmissions
} 
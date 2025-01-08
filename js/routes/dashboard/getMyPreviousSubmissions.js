import { submissionsEndpoint } from "../constants.js";

function GetMyPreviousSubmissions(id, RevisionId){
   return fetch(`${submissionsEndpoint}/backend/editors/myPreviousSubmissions.php`, {
        method: "POST",
        body:JSON.stringify({admin_id:id, revision_id:RevisionId}),
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
    GetMyPreviousSubmissions
} 
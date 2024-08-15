import { submissionsEndpoint } from "../constants.js"

async function countAcceptedEditorInvitations(article_id){
    return fetch(`${submissionsEndpoint}/backend/editors/countAcceptedEditorInvitations.php?a_id=${article_id}`,{})
    .then(res=>res.json())
    .then(data=>{
        if(data.success){
            return data.count
            
        }else{
            console.log(data.error)
        }
    })
}

async function CountRejectedEditorInvitaitons(article_id){
    return fetch(`${submissionsEndpoint}/backend/editors/countRejectedEditorInvitations.php?a_id=${article_id}`,{})
    .then(res=>res.json())
    .then(data=>{
        if(data.success){
            return data.count
        }else{
            console.log(data.error)
        }
    })
}

async function CountTotalEditorInvitaitons(article_id){
    return fetch(`${submissionsEndpoint}/backend/editors/countTotalEditorInvitations.php?a_id=${article_id}`,{})
    .then(res=>res.json())
    .then(data=>{
        if(data.success){
            return data.count
        }else{
            console.log(data.error)
        }
    })
}
export {
    countAcceptedEditorInvitations,
    CountRejectedEditorInvitaitons,
    CountTotalEditorInvitaitons
}
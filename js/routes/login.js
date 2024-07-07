import { parentDirectoryName, submissionsEndpoint } from "./constants.js";
import { GetCookie, SetCookies, hoursToKeep } from "./setCookie.js";
import { validateLogin } from "./validateLogin.js";

const LoginForm = document.getElementById("login-form")

// check if the user is logged in 
const editor = GetCookie("editor")

if(editor){
    const IsEditor = await validateLogin(editor)
    if(IsEditor){
        window.location.href = `${parentDirectoryName}/Dashboard`
    }else{
     
        window.location.href = `${parentDirectoryName}/workflow/accounts/login`
    }
}else{
if(LoginForm){

    LoginForm.addEventListener("submit", function(e){
        e.preventDefault();
        const formData = {
            email: email.value,
            pass: password.value
        }

        fetch(`${submissionsEndpoint}/backend/editors/login.php`, {
            method:"POST",
            body: JSON.stringify(formData),
            headers:{
                "Content-type" : "application/JSON"
            }
        }).then(res=>res.json())
        .then(data=>{
            if(data){
            if(data.status === "success"){
                const userId = data.id 
                SetCookies("editor", userId, hoursToKeep);

                window.location.href = `${parentDirectoryName}/Dashboard`
            }else{
                alert(data.message)
            }
        }else{
            console.error("No data")
        }
        })
    
    })
}
}
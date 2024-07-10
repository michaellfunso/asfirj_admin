import { submissionsEndpoint } from "../constants.js";
import { GetCookie } from "../setCookie.js";


// Get a List of Availabel Reviewers 
const userID = GetCookie("editor")
async function ReviewersList(){
    return fetch(`${submissionsEndpoint}/backend/editors/listOfReviewerEmails.php`,{
        method:"POST",
        body:JSON.stringify({editorId:userID})
    }).then(res=>res.json())
    .then(data=>{
        if(data.success){
            return data.emails.map(item => item.email);

        }else{
            return {}
        }
    })
}

const emails = await ReviewersList();
const emailList = document.getElementById('emailList');
const emailInput = document.getElementById('email');

function renderEmailList(filteredEmails) {
    emailList.innerHTML = '';
    if (filteredEmails.length > 0) {
        filteredEmails.forEach(email => {
            const li = document.createElement('li');
            li.textContent = email;
            li.addEventListener('click', () => {
                emailInput.value = email;
                emailList.style.display = 'none';
            });
            emailList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.textContent = 'No item matches your search';
        li.classList.add('no-match');
        emailList.appendChild(li);
    }
}

function filterEmailList() {
    const filter = emailInput.value.toLowerCase();
    const filteredEmails = emails.filter(email => email.toLowerCase().includes(filter));
    renderEmailList(filteredEmails);
    if (emailInput.value.trim() !== '') {
        emailList.style.display = 'block';
    } else {
        emailList.style.display = 'none';
    }
}

emailInput.addEventListener("keyup", function(e){
    e.preventDefault()
    filterEmailList()
})
import { GetCookie } from "../setCookie.js";
import { validateLogin } from "../validateLogin.js";

const admin_nav = `<ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Dashboard/"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Authors/"
                                aria-expanded="false">
                                <i class="bi bi-person" aria-hidden="true"></i>
                                <span class="hide-menu">Authors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Inbox/"
                                aria-expanded="false">
                                <!-- <i class="fas fa-hands" aria-hidden="true"></i> -->
                                <i class="fas fa-envelope"></i>
                                <span class="hide-menu">Inbox</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://asfirj.org/manuscriptPortal/manage" target="_blank"
                                aria-expanded="false">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Supplements</span>
                            </a>
                        </li>
                  
                        
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../Logout/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Logout</a>
                        </li>
                    </ul> `
const editor_nav = `<ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Dashboard/"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Inbox/"
                                aria-expanded="false">
                                <!-- <i class="fas fa-hands" aria-hidden="true"></i> -->
                                <i class="fas fa-envelope"></i>
                                <span class="hide-menu">Inbox</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../Logout/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Logout</a>
                        </li>
                    </ul> `;

const user = GetCookie("editor")
if(user){
const AccountData = await validateLogin(user)
const navbar_container = document.getElementById("sidebar_nav")


const userFullname = AccountData.fullname 
const email = AccountData.email 
const accoount_type = AccountData.editorial_level

if(accoount_type === "editor_in_chief" || accoount_type === "editorial_assistant"){
   navbar_container.innerHTML = admin_nav;
}else if(accoount_type === 'sectional_editor' || accoount_type === "associate_editor"){
    navbar_container.innerHTML = editor_nav;
}
}
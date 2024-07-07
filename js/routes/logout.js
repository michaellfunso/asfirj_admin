import { parentDirectoryName } from "./constants";
import { DeleteCookie, GetCookie } from "./setCookie.js";

const editorCookie = GetCookie("editor")

if(editorCookie){
    DeleteCookie("editor")
       window.location.href = `${parentDirectoryName}/Dashboard`
}else{
       window.location.href = `${parentDirectoryName}/Dashboard`
}
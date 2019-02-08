$(document).ready(function(){
    const arr = document.cookie.split(';');
    if (Array.isArray(arr) && arr[0] !== '') {
        for (let i = 0; i < arr.length; i++) {
            let tmp = arr[i].split('=');
            add(tmp[1]);
        }
    }
});

function newTodo() {
    const name = prompt("Please enter a name of new TO DO:");
    if (name != '' && name != null) {
        add(name);
    }
}

function add(name) {
    if (name != '' && name != null) {
        $('#ft_list').prepend($(`<div>${name}</div>`).click(del));
        addCookies(name);
    }
}

function del() {
    if (confirm("Do you really want to delete this TO DO?")) {
       this.remove();
       delCookies(this.innerHTML);
    }
}

function addCookies(name) {
    document.cookie = `${name}=${name};`;
}

function delCookies(name) {
    document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:01 GMT;`;
}

$(document).ready(function() {
   $.ajax({
       type: "GET",
       url: 'select.php',
       success: function(response) {
           console.log(response);
           var arr = JSON.parse(response);
           if (Array.isArray(arr) && arr[0] != '') {
               for (let i = 0; i <arr.length; i++) {
                   if (arr[i] != '') {
                       let tmp = arr[i].split(';');
                       add_old(tmp[1]);
                   }
               }
           }
       }
   });
});

function newTodo() {
    const name = prompt("Please enter a name of new TODO:");
    if (name != '' && name != null)
        add(name);
}

function add(name) {
    if (name != '' && name != null)
        $('#ft_list').prepend($(`<div>${name}</div>`).click(del));
    $.ajax({
        type: "GET",
        url: `insert.php?${name}=${name}`
    });
}

function add_old(name) {
    if (name != '' && name != null)
        $('#ft_list').prepend($(`<div>${name}</div>`).click(del));
}

function del() {
    if (confirm("Do you really want to delete this TODO?")) {
        this.remove();
        delCsv(this.innerHTML);
    }
}

function delCsv(name) {
    $.ajax({
        type: "GET",
        url: `delete.php?${name}=${name}`,
        success: function () {
        }
    });
}
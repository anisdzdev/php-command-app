const input = document.getElementById("input");
const snackbar = document.getElementById("snackbar");
const result = document.getElementById("result");

input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("btn").click();
    }
});

function showSnackbar(message) {
    snackbar.className = "show";
    snackbar.innerText = message;
    setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
}

function validate(inputValue) {
    const cmd = inputValue.substr(0,inputValue.indexOf(' ')); // "72"
    const args = inputValue.substr(inputValue.indexOf(' ')+1)
    if(!inputValue || inputValue.length < 4 || !cmd || !args)
        return false
    return {cmd, args}
}

function onSubmit(){
    const inputValue = input.value;
    const split = validate(inputValue);
    if(!validate(inputValue))
        return showSnackbar("Please enter a valid command")
    $.ajax('commands/commands.php', {
        type: 'POST',  // http method
        data: { cmd: split.cmd, args: split.args },  // data to submit
        success: function (data, status) {
            if(data && data.startsWith("Error"))
                showSnackbar(data)
            else
                result.innerHTML = ('Result: ' + data);
        },
        error: function (jqXhr, textStatus, errorMessage) {
            showSnackbar('Error ' + errorMessage);
        }
    });
}
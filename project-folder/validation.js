document.querySelector("form").addEventListener("submit", function(e) {
    const username = document.querySelector("input[name='username']").value;
    const password = document.querySelector("input[name='password']").value;

    if (!username || !password) {
        alert("Please fill out all fields!");
        e.preventDefault();
    }
});
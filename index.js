//FOR CREATING A NEW USER AND DISPLAYING THE DATA
const createUserForm = document.getElementById('create-user-form')
createUserForm.addEventListener('submit', async function(e){
    
    e.preventDefault();
    // if(document.getElementById('new-password').value !== document.getElementById('confirm-password').value){
    //     console.log("Passwords do not match");
    //     return;
    // }
    try{
        const formData = new FormData(this)

        const response = await fetch('./create_user.php', {
            method: "POST",
            body: formData
        })
        if(response.ok){
            const returnData = await response.json()
            for(let key in returnData){
                if(returnData.hasOwnProperty(key)){
                    let data = returnData[key].split(' ')
                    const userBlock = document.createElement('div')
                    userBlock.classList.add('user-block')
                    userBlock.setAttribute('data-key', key)

                    const existingUser = document.createElement('p')
                    existingUser.classList.add('existing-user');
                    existingUser.innerHTML = "KEY= " + key + " // User: " + data[0] + " // password: " + data[1];

                    const deleteUserBtn = document.createElement('button')
                    deleteUserBtn.classList.add('delete-user-btn')
                    deleteUserBtn.innerHTML = "delete user"

                    userBlock.append(existingUser, deleteUserBtn)
                    document.getElementById('return-all-users').insertBefore(userBlock, document.getElementById('return-all-users').firstChild)
                }
            }
        } else {
            throw new Error('response failed with ' + response.status)
        }
    } catch(error){
        console.error(error)
    }
})


//FOR DELETING A USER 
const returnAllUsers = document.getElementById('return-all-users')
returnAllUsers.addEventListener('click', async function(e){
    if(e.target.parentNode.classList.contains('user-block')){
        const user = e.target.parentNode
        const id = user.getAttribute('data-key')
        console.log(parseInt(id))
        const data = new FormData();
        data.append('key', id);

        fetch('./delete_user.php', {
            method: 'POST',
            body: data
          })
            .then(response => response.text())
            .then(result => {
              console.log(result);
            })
            .catch(error => {
              console.error(error);
            });

        while(user.firstChild){
            user.removeChild(user.firstChild)
        }
        user.parentNode.removeChild(user)












    }
})
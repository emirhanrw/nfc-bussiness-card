const form = document.querySelector('#user_add_form');
form.addEventListener('submit',(event)=>{
    event.preventDefault();
    const formData = new FormData(form);
    fetch('ajax_form_add.php',{
        method:'POST',
        body:formData
    })
    .then(response=>response.json())
    .then(data=>{
        const message_form = document.querySelector('#message_form');
        const link = document.querySelector('#link');
        message_form.innerHTML = `<div class="alert alert-${data.alert} text-center mt-3" role="alert" style="font-size:20px; font-weight:700;">${data.message}</div>`;
        if(data.link){
            link.innerHTML = `<div class="alert alert-light mt-3 copyLink" role="alert">${data.link} <span id="copyicon"><i class="fa-solid fa-copy"></i></span></div>`;
        }
        form.reset();
        console.log(data);
    })
    .catch(error=>{
        console.error('Hata olsuştu: '+error);
    })
});
const copyText = document.getElementById("link");
copyText.addEventListener('click', () => {
    const text = copyText.textContent;
    const textArea = document.createElement("textarea");
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
    document.querySelector('#copyicon').innerHTML = '<i class="fa-solid fa-circle-check"></i>';
});
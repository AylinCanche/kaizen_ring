const URL='https://api.jotform.com/form/230327053845857/submissions?apikey=cdf7a35d551343104477f7056c19b38b&orderby=identificaci%C3%B3n';

fetch(URL)
.then(Response=>Response.json())
.then (data => {
    console.log(data)
    let element=document.getElementById('elem')
    element.innerHTML =`<p>${data.content}</p>`;
  
})
.catch(err=>console.log(err))



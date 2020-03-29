function showHideElement(id)
{
    let element = document.querySelector('#' + id )
    element.style.display = 'block' 
    setTimeout(() => {
        element.style.display = 'none' 
    }, 4000);
}
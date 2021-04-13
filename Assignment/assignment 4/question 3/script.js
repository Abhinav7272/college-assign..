function check(){
    const content1 = document.getElementById("paragraph1")
    const content2 = document.getElementById("paragraph2")
    let x = content1.value
    content1.value = content2.value
    content2.value = x

}
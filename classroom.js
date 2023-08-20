let msgdiv=document.querySelector(".msg");
setInterval(() => {
  fetch("read_msg.php").then(
    r=>{
     if(r.ok){
      return r.text();
     }
    }
  ).then(
    d=>{
      msgdiv.innerHTML=d;
    }
  )
}, 500);


window.onkeydown = (e)=>{
    if(e.key == "Enter"){
        update();
    }
}




function update(){
    let msg=input_msg.value;
    input_msg.value="";
    fetch(`add_msg.php?msg=${msg}`).then(
      r=>{
        if(r.ok){
          return r.text();
        }
      }
    ).then(
      d=>{
        console.log("msg has been added")
        // msgdiv.scrollTop=(msgdiv.scrollHeight-msgdiv.clientHeight);
      }
    )
  }
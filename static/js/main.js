

window.addEventListener("load", async ()=>{
    let feeder = new Feeder(`${rootURL}/api/getUser/`, "#users");
    await feeder.getResource()
});
class Feeder {
    constructor(endpoint, querySelector) {
        this.endpoint = endpoint;
        this.targets = document.querySelectorAll(querySelector);
    }

    async getResource() {
        let response = await (await fetch(this.endpoint)).json();
        if (!(response.length === 2)) {
            return;
        }
        let [context, templateURL] = response;
        let template = await (await fetch(templateURL)).text();


        this.targets.forEach(target => target.innerHTML += render(template, context))
    }
}
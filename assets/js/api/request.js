//////////////
// Request API
//////////////

/*
export function getCommitsNumber() {
    return fetch('api/smartphones.json')
        .then(response => {
            return response.text()
                .then((text) => {
                    if (text) {
                        if (JSON.parse(text).hasOwnProperty('hydra:member')) return JSON.parse(text)['hydra:member'];
                        console.log(JSON.parse(text));
                    }
                    return JSON.parse(text);
                });
        });
}
*/

export function getPublicRepoNumber() {
    return fetch('https://api.github.com/users/DurandSacha')
        .then(response => {
            return response.text()
                .then((text) => {
                    if (text) {
                        if (JSON.parse(text).hasOwnProperty('hydra:member')) return JSON.parse(text)['hydra:member'];
                    }
                    console.log(JSON.parse(text));
                    return JSON.parse(text);
                });
        });
}
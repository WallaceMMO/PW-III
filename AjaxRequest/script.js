var ajax = new XMLHttpRequest();

document.addEventListener("DOMContentLoaded", event => {

    var container = document.querySelector('.container-list');

    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status == 200){
            const r = JSON.parse(ajax.response).data;
            
            //r.forEach(user => console.log(user));

            r.forEach(data => {
                const d = document;

                var row = d.createElement('div');
                row.classList.add('row');

                var img = d.createElement('img');
                img.src = data.avatar;

                var h3 = d.createElement('h3');
                h3.appendChild(d.createTextNode('ID '))

                var spanH3 = d.createElement('span');
                spanH3.appendChild(d.createTextNode(`(#${data.id})`))
                h3.appendChild(spanH3)

                var p = [
                    d.createElement('p'),
                    d.createElement('p'),
                    d.createElement('p')
                ]

                var spanData = [
                    d.createElement('span'),
                    d.createElement('span'),
                    d.createElement('span')
                ]

                spanData[0].appendChild(d.createTextNode(data.first_name))
                spanData[1].appendChild(d.createTextNode(data.last_name))
                spanData[2].appendChild(d.createTextNode(data.email))

                p[0].appendChild(d.createTextNode('First Name: '))
                p[1].appendChild(d.createTextNode('Last Name: '))
                p[2].appendChild(d.createTextNode('Email: '))

                spanData.map((span, i) => p[i].appendChild(span))

                row.appendChild(img)
                row.appendChild(h3)
                p.map(paragraph => row.appendChild(paragraph))
                container.appendChild(row)
            })
        }
    }

    ajax.open('GET', 'https://reqres.in/api/users');
    ajax.send();

});
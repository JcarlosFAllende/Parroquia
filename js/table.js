const state = {};



state.data = data;
state.customData = data;
var tbody = document.getElementById("tbody");
state.valueSatus = "";
state.valueLocation = "";
state.numberDisplay = 0;
var tbody = document.getElementById("tbody");


// // for (let key in data) {
// //     // console.log(data[key],key,);
// //     let elem = create_elment(data[key]);
// //     tbody.insertAdjacentHTML('beforeend',elem);

// // }

function getStatus(self) {
    switch (self) {
        case 'Shipped':
            return 'class="status text-info"';
            break;
        case 'Pending':
            return 'class="status text-warning"';
            break;
        case 'Cancelled':
            return 'class="status text-danger"';
            break;

        default:
            return 'class="status text-success"';
            break;
    }
}

function create_elment(item) {
    return `
    <tr>
        <td>${item.id}</td>
        <td><a href="#"><img src="https://www.tutorialrepublic.com/examples/images/avatar/1.jpg" class="avatar" alt="Avatar"> ${item.Customer}</a></td>
        <td>${item.Location}</td>
        <td>${item.Order_Date}</td>                        
        <td><span `+ getStatus(item.Status) + `>•</span> ${item.Status}</td>
        
        <td>
            <a href="#" class="settings" title="" data-toggle="tooltip" data-original-title="Settings"><i class="material-icons"></i></a>
            <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons"></i></a>
        </td>
    </tr>
    `;
}


loadData();

// console.log(get_text);
//ds

var numberBD = document.getElementById('number1').innerHTML;
var numberKT = document.getElementById('number2').innerHTML;

function loadData() {
    document.getElementById('number1').innerHTML = 1;
    document.getElementById('number2').innerHTML = 5;
    state.valueEntries = 5;
    state.valueSatus = "Any";
    state.valueLocation = "All";
    let data = state.customData.slice(0, 5);
    tbody.innerHTML = "";
    data.forEach(item => {
        tbody.insertAdjacentHTML('beforeend', create_elment(item));
    })
}

var select = document.getElementById("select-entries");
var num_entries;
var numPage;
var show;

var dem;

//tao li
function create_li(item) {
    return `
        <a onclick="changeclick(this)" href="#" class="page-link">${item}</a>
    `;
}
function changeclick(id) {
    return 1;
}

taosubpag();
ktshow();
chia_theo_show();
function taosubpag() {
    var subpage = document.getElementById("subpage");
    for (var i = 1; i <= Math.ceil(data.length / 5); i++) {
        var li = document.createElement("li");
        li.innerHTML = create_li(i);
        subpage.appendChild(li);
    }
};

function ktshow() {
    document.getElementById('select-entries').addEventListener('change', e => {
        let selectDataforEntry = state.customData.slice(0, e.target.value);
        tbody.innerHTML = "";
        selectDataforEntry.forEach(item => {
            tbody.insertAdjacentHTML('beforeend', create_elment(item));
        })
    });


}
var select = document.getElementById("select-entries");
var num_entries;
var numPage;
function chia_theo_show() {

    select.onchange = function () {
        var option = select.children;
        for (var i = 0; i < option.length; i++) {
            if (option[i].selected) {
                num_entries = option[i].value;
            }
        }
        numPage = Math.ceil(data.length / num_entries);
        document.getElementById('number1').innerHTML = 1;
        document.getElementById('number2').innerHTML = num_entries;
        subpage.innerHTML = "";
        for (var i = 1; i <= numPage; i++) {
            var li = document.createElement("li");
            li.innerHTML = create_li(i);
            li.value = i;
            subpage.appendChild(li);
        }
    }
}


var luaChon = subpage.children;
var page = document.getElementById("page");
var so;
    for (var i = 1; i <= luaChon.length; i++) {
        if (changeclick(luaChon[i])==1)
            so=i;
    }


    var search = document.getElementById("search");
search.addEventListener("keyup", function () {
    var searchValue = (document.getElementById("search").value).toLowerCase();
    tbody.innerHTML = "";
    if (searchValue == "")
        load();
    else {
        for (var i = 0; i < data.length; i++) {
            if (searchValue != "") {
                if (data[i].id.indexOf(searchValue) >= 0 || (data[i].Customer).toLowerCase().indexOf(searchValue) >= 0 || (data[i].Location).toLowerCase().indexOf(searchValue) >= 0 || (data[i].Status).toLowerCase().indexOf(searchValue) >= 0)
                    xuat(data[i]);
            }

        }
    }
});

function xuat(item) {

    var tr = document.createElement("tr");
    tr.innerHTML = create_elment(item);
    tbody.appendChild(tr);
}

function load() {
    for (var i = 0; i < 5; i++) {
        //console.log(data[i]);
        //console.log(item);
        var tr = document.createElement("tr");
        tr.innerHTML = create_elment(data[i]);
        tbody.appendChild(tr);
    }
}
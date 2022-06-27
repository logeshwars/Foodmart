var count = document.querySelectorAll('.c1')

function inccount(n, s) {
    let temp = count[n].value;
    temp = Number(temp);
    if (s === "add")
        count[n].value = ++temp;
    if (s === 'less' && temp !== 0)
        count[n].value = --temp;
}
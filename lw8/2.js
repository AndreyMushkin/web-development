function calc(arg) {
    let expr = '';
    for (let i = 0; i < arg.length; i++) {
        if (arg[i] === '(' || arg[i] === ')') {
            expr = expr + ' ';
        } else {
            expr = expr + arg[i];
        }
    }
    expr = expr.replace(/\s+/g, ' ').trim();
    let arr = expr.split(' ');
    for (i = arr.length - 1; i >= 0; i--) {
        switch(arr[i]) {
            case '+':
                arr[i] = Number(arr[i + 1]) + Number(arr[i + 2]);
                arr.splice(i + 1, 2);
                break;
            case '-':
                arr[i] = Number(arr[i + 1]) - Number(arr[i + 2]);
                arr.splice(i + 1, 2);
                break;
            case '*':
                arr[i] = arr[i + 1] * arr[i + 2];
                arr.splice(i + 1, 2);
                break;
            case '/':
                arr[i] = arr[i + 1] / arr[i + 2];
                arr.splice(i + 1, 2);
                break;
        }
    }
    return arr[0];
}

str = prompt();
while (1) {
    console.log(str, " = ", calc(str));
    str = prompt();
}
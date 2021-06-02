function isPrimeNumber(data) {
    let isPrime;

    if (typeof data === "object") {
        for (let value of Object.values(data)) {
            if (typeof value === "number") {
                isPrime = true;

                for (let i = 2; (i < value / 2) && isPrime; i++) {
                    if (value % i === 0) isPrime = false;
                }

                if (isPrime) {
                    console.log(value, "is prime number");
                } else {
                    console.log(value, "is not prime number");
                }
            } else {
                console.log("Passed value is not a number! (", value, ")");
            }
        }
    } else if (typeof data === "number") {
        isPrime = true;

        for (let i = 2; (i < data / 2) && isPrime; i++) {
            if (data % i === 0) isPrime = false;
        }
        
        if (isPrime) {
            console.log(data, "is prime number");
        } else {
            console.log(data, "is not prime number");
        }    
    } else {
        console.log("Passed value is not a number! (", data, ")"); 
    }
}
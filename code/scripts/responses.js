function getBotResponse(input) {
//This whole script is just plain old if statements not really revolutionary but for a prototype its good enough 
//than nothing at all
//The thing I want is not using this as a storage of the bot's intelligence or word bank  
//but a properdatabase if must that can be added with ease without any hiccups
//and make that a form out of that to add more knowledge without going to the database and adding more
//need a way to properly and productively to add stuff to the database

    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    //Fuck you
    if (input == "fuck you" || "Fuck you" || "FUCK YOU" || "FUCK YOU BOT") {
        return "Fuck you too";
    } else if (input == "shithead") {
        return "shithead user";
    } else if (input == "motherfucker") {
        return "shut up you motherfucker";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}
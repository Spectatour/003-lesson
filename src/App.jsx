import React, { useState } from "react";

const numberToLetter = {
  1: "A",
  2: "B",
  3: "C",
  4: "D",
  5: "E",
  6: "F",
  7: "G",
  8: "H",
  9: "I",
  10: "J",
  11: "K",
  12: "L",
  13: "M",
  14: "N",
  15: "O",
  16: "P",
  17: "Q",
  18: "R",
  19: "S",
  20: "T",
  21: "U",
  22: "V",
  23: "W",
  24: "X",
  25: "Y",
  26: "Z",
};

const cipher = [0, 3, 1, 0, 2, 0, 2, 3];

const AlphabetConverter = () => {
  const [input, setInput] = useState("");
  const [output, setOutput] = useState("");

  const handleInput = (event) => {
    setInput(event.target.value);
  };

  const convertToMessage = () => {
    const numbers = input.split(".");
    const message = numbers
      .map((number, index) => {
        const cipherIndex = index % cipher.length;
        const cipherOffset = cipher[cipherIndex];
        const letterNumber = parseInt(number) - cipherOffset;
        const letter = numberToLetter[letterNumber];
        return letter || "";
      })
      .join("");
    setOutput(message);
  };

  return (
    <div>
      <h1>Alphabet Converter</h1>
      <p>Enter a set of numbers separated by periods:</p>
      <input type="text" value={input} onChange={handleInput} />
      <button onClick={convertToMessage}>Convert</button>
      <p>Result: {output}</p>
    </div>
  );
};

export default AlphabetConverter;


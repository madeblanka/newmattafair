
// const adult = document.getElementById('adult');
// const adult2 = document.getElementById('adult2');
// const adult3 = document.getElementById('adult3');
// const adult4 = document.getElementById('adult4');
// const adult5 = document.getElementById('adult5');
// const adult6 = document.getElementById('adult6');
// const adult7 = document.getElementById('adult7');
// const adult8 = document.getElementById('adult8');
// const child = document.getElementById('child');
// const child2 = document.getElementById('child2');
// const child3 = document.getElementById('child3');
// const child4 = document.getElementById('child4');
// const child5 = document.getElementById('child5');
// const child6 = document.getElementById('child6');
// const child7 = document.getElementById('child7');
// const child8 = document.getElementById('child8');
// // const jml_kamar = document.getElementById('jml_kamar');

// adult.addEventListener('input', function(event) {
//   validateInput(adult);
// });
// adult2.addEventListener('input', function(event) {
//   validateInput(adult2);
// });
// adult3.addEventListener('input', function(event) {
//   validateInput(adult3);
// });
// adult4.addEventListener('input', function(event) {
//   validateInput(adult4);
// });
// adult5.addEventListener('input', function(event) {
//   validateInput(adult5);
// });
// adult6.addEventListener('input', function(event) {
//   validateInput(adult6);
// });
// adult7.addEventListener('input', function(event) {
//   validateInput(adult7);
// });
// adult8.addEventListener('input', function(event) {
//   validateInput(adult8);
// });

// child.addEventListener('input', function(event) {
//   validateInputBaby(child);
// });
// child2.addEventListener('input', function(event) {
//   validateInputBaby(child2);
// });
// child3.addEventListener('input', function(event) {
//   validateInputBaby(child3);
// });
// child4.addEventListener('input', function(event) {
//   validateInputBaby(child4);
// });
// child5.addEventListener('input', function(event) {
//   validateInputBaby(child5);
// });
// child6.addEventListener('input', function(event) {
//   validateInputBaby(child6);
// });
// child7.addEventListener('input', function(event) {
//   validateInputBaby(child7);
// });
// child8.addEventListener('input', function(event) {
//   validateInputBaby(child8);
// });

// // jml_kamar.addEventListener('input', function(event) {
// //   validateInputKamar(jml_kamar);
// // });

// function validateInputBaby(inputElement) {
//   const value = parseInt(inputElement.value, 10);
//   console.log(inputElement.value);
//   if (value < 0 || value > 15) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity('Please enter a value between 1 and 10.');
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }
// function validateInput(inputElement) {
//   const value = parseInt(inputElement.value, 10);
//   console.log(inputElement.value);
//   if (value < 1 || value > 15) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity('Please enter a value between 1 and 10.');
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }
// function validateInputKamar(inputElement) {
//   const value = parseInt(inputElement.value, 10);
//   if (value < 1 || value > 100) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity('Please enter a value between 1 and 100.');
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }

// const inputs = [
//   'adult', 'adult2', 'adult3', 'adult4', 'adult5', 'adult6', 'adult7', 'adult8',
//   'child', 'child2', 'child3', 'child4', 'child5', 'child6', 'child7', 'child8'
// ];

// inputs.forEach(inputName => {
//   const inputElement = document.getElementById(inputName);
//   inputElement.addEventListener('input', function(event) {
//     validateInput(inputElement, inputName.includes('child') ? 0 : 1, inputName.includes('kamar') ? 100 : 15);
//   });
// });

// function validateInput(inputElement, min, max) {
//   const value = parseInt(inputElement.value, 10);
//   if (value < min || value > max) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity(`Please enter a value between ${min} and ${max}.`);
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }

// const numberOfInputs = 8; // Number of adult and child inputs

// for (let i = 1; i <= numberOfInputs; i++) {
//   const adultInputElement = document.getElementById(`adult${i}`);
//   const childInputElement = document.getElementById(`child${i}`);
  
//   if (adultInputElement) {
//     adultInputElement.addEventListener('input', function(event) {
//       validateInput(adultInputElement, 1, 15);
//     });
//   }
  
//   if (childInputElement) {
//     childInputElement.addEventListener('input', function(event) {
//       validateInput(childInputElement, 0, 10);
//     });
//   }
// }

// function validateInput(inputElement, min, max) {
//   const value = parseInt(inputElement.value, 10);
//   if (value < min || value > max) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity(`Please enter a value between ${min} and ${max}.`);
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }


// Find all input elements with IDs that match the pattern 'adultX' or 'childX'
// const inputElements = document.querySelectorAll('[id^="adult"], [id^="child"], [id^="optional"]');

// inputElements.forEach(inputElement => {
//   inputElement.addEventListener('input', function(event) {
//     const isChild = inputElement.id.startsWith('child');
//     const max = isChild ? 10 : 12;
//     const min = isChild ? 0 : 1;
//     validateInput(inputElement, min, max);
//   });
// });

// function validateInput(inputElement, min, max) {
//   const value = parseInt(inputElement.value, 10);
//   if (value < min || value > max) {
//     inputElement.value = ''; // Clear the input if it's not within the desired range
//     inputElement.setCustomValidity(`Please enter a value between ${min} and ${max}.`);
//   } else {
//     inputElement.setCustomValidity('');
//   }
// }


const inputElements = document.querySelectorAll('[id^="adult"], [id^="child"], [id^="optional"]');

inputElements.forEach(inputElement => {
  inputElement.addEventListener('input', function(event) {
    const isChild = inputElement.id.startsWith('child');
    const isOptional = inputElement.id.startsWith('optional');
    let min = 2;
    let max =  12;
    
    if (isOptional) {
      min = 2;
     max =  12;
    }
    
    validateInput(inputElement, min, max);
  });
});

function validateInput(inputElement, min, max) {
  const value = parseInt(inputElement.value, 10);
  if (value < min || value > max) {
    inputElement.value = ''; // Clear the input if it's not within the desired range
    inputElement.setCustomValidity(`Please enter a value between ${min} and ${max}.`);
  } else {
    inputElement.setCustomValidity('');
  }
}
// function validateEmail(inputText) {
//     var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     if (inputText.value.match(mailFormat)) {
//       alert("Valid address!");
//       return true;
//     } else {
//       alert("Invalid address!");
//       return false;
//     }
//   }

//   var phIn = document.getElementById('phoneNo')

//       phIn.addEventListener('input', () => {
//         phIn.setCustomValidity('')
//         phIn.checkValidity()
//       })

//       phIn.addEventListener('invalid', () => {
//         if (phIn.value === '') {
//           phIn.setCustomValidity('Enter phone number!')
//         } else {
//           phIn.setCustomValidity(
//             'Enter a phone number in this format: 123-456-7890',
//           )
//         }
//       })
  
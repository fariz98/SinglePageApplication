
// const strengthMeter = document.getElementById('strength-meter')
const passwordInput = document.getElementById('password-input')
const passwordConfirmationInput = document.getElementById('password-confirmation-input') ? document.getElementById('password-confirmation-input') : ''
const reasonsContainer = document.getElementById('reasons')
const reasonsContainer2 = document.getElementById('reasons2')

// if (passwordInput.value == ""){
//     $("#strength-meter").hide();
// }

passwordInput.addEventListener('input', updateStrengthMeter)
if(passwordConfirmationInput != "") passwordConfirmationInput.addEventListener('input', updateStrengthMeter)

updateStrengthMeter()

function updateStrengthMeter() {
    if (passwordInput.value != ""){
        // $("#strength-meter").show();
    
        const weaknesses = calculatePasswordStrength(passwordInput.value)
            
        let strength = 100
        reasonsContainer.innerHTML = ''
        
        weaknesses.forEach(weakness => {
            if (weakness == null) return
            strength -= weakness.deduction
            const messageElement = document.createElement('div')
            messageElement.innerText = weakness.message
            reasonsContainer.appendChild(messageElement)
        })
        // strengthMeter.style.setProperty('--strength', strength)
    }

    if (passwordConfirmationInput != "" && passwordConfirmationInput.value != ""){

        reasonsContainer2.innerHTML = ''

        if(passwordInput.value != passwordConfirmationInput.value){
            const messageElement = document.createElement('div')
            messageElement.innerText = "Pengesahan Kata laluan tidak sama dengan kata laluan baharu"
            reasonsContainer2.appendChild(messageElement)
        } 
    }
}

function calculatePasswordStrength(password) {
  const weaknesses = []
  weaknesses.push(lengthWeakness(password))
  weaknesses.push(lowercaseWeakness(password))
  weaknesses.push(uppercaseWeakness(password))
  weaknesses.push(numberWeakness(password))
  weaknesses.push(specialCharactersWeakness(password))
//   weaknesses.push(repeatCharactersWeakness(password))
  return weaknesses
}

function lengthWeakness(password) {
  const length = password.length

  if (length <= 5) {
    return {
      message: 'Kata laluan terlalu singkat',
      deduction: 40
    }
  }

  if (length < 12) {
    return {
      message: 'Kata laluan mestilah sekurang-kuranya dua belas (12) aksara',
      deduction: 15
    }
  }
}

function uppercaseWeakness(password) {
  return characterTypeWeakness(password, /[A-Z]/g, 'huruf besar')

}

function lowercaseWeakness(password) {
  return characterTypeWeakness(password, /[a-z]/g, 'huruf kecil')
}

function numberWeakness(password) {
  return characterTypeWeakness(password, /[0-9]/g, 'nombor')
}

function specialCharactersWeakness(password) {
  return characterTypeWeakness(password, /[^0-9a-zA-Z\s]/g, 'aksara khas')
}

function characterTypeWeakness(password, regex, type) {
  const matches = password.match(regex) || []

  if (matches.length === 0) {
    return {
      message: `Kata laluan harus ada ${type}`,
      deduction: 20
    }
  }

//   if (matches.length <= 2) {
//     return {
//       message: `Your password could use more ${type}`,
//       deduction: 5
//     }
//   }
}

function repeatCharactersWeakness(password) {
  const matches = password.match(/(.)\1/g) || []
  if (matches.length > 0) {
    return {
      message: 'Your password has repeat characters',
      deduction: matches.length * 10
    }
  }
}
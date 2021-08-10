import ApiReq from '../modules/apiReq.js'
import FieldRow from '../modules/field-row.js'
import _ from '../modules/queryLight.js'

_('.auth__form').on('submit', tryRegister)

const loginLoader = _('#register-loader')



function tryRegister(evt) {
  evt.preventDefault()
  FieldRow.clearAllErrors()

  loginLoader.dataset.shown = true
  ApiReq.send('register', 'post', <BodyInit>_(this).formData()).then(handleResponse)
}

function handleResponse(response) {
  delete loginLoader.dataset.shown

  if (response.error) registerFailed(response.error)
  else registerSuccess(response.data)
}

function registerFailed(error) {
  error.code === 422 && Object.keys(error.errors).forEach(key => FieldRow.setError(key, error.errors[key]))
}

function registerSuccess(data) {
  if (data) location.href = '/login.html'
}
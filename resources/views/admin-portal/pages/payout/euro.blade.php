<p class="mb-2">Name on Account - {{ isset(bankAccount($bank,'euro')->name) ? bankAccount($bank,'euro')->name : null }} </p>
<p class="mb-2">Address of Account Holder - {{ isset(bankAccount($bank,'euro')->address) ? bankAccount($bank,'euro')->address : null }} </p>
<p class="mb-2">Account Number - {{ isset(bankAccount($bank,'euro')->account_number) ? bankAccount($bank,'euro')->account_number : null }} </p>
<p class="mb-2">BIC - {{ isset(bankAccount($bank,'euro')->bic) ? bankAccount($bank,'euro')->bic : null }} </p>
<p class="mb-2">IBAN - {{ isset(bankAccount($bank,'euro')->iban) ? bankAccount($bank,'euro')->iban : null }} </p>
<p class="mb-2">Bank Name - {{ isset(bankAccount($bank,'euro')->bank_name) ? bankAccount($bank,'euro')->bank_name : null }} </p>
<p class="mb-2">Bank Address - {{ isset(bankAccount($bank,'euro')->bank_address) ? bankAccount($bank,'euro')->bank_address : null }} </p>
<p class="mb-2">Postal Code - {{ isset(bankAccount($bank,'euro')->postal_code) ? bankAccount($bank,'euro')->postal_code : null }} </p>
<p class="mb-2">Sharpline Distro Password - {{ isset(bankAccount($bank,'euro')->password) ? bankAccount($bank,'euro')->password : null }} </p>

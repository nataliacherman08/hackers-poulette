const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

switchTheme = (e) => {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);

//=========================================================================

/*sendEmail = () => {
    let firstname = $('#firstname');
    let lastname = $('#lastname');
    let mail = $('#mail');
    let subject = $('#subject');
    let message = $('message');

    if (isNotEmpty(firstname)
        && isNotEmpty(lastname)
        && isNotEmpty(mail)
        && isNotEmpty(subject)
        && isNotEmpty(message)) {
        $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data: {
                firstname: firstname.val(),
                lastname: lastname.val(),
                mail: mail.val(),
                subject: subject.val(),
                message: message.val()
            }, success: (response) => {
                $('#myForm')[0].reset();
                $('.sent-notification').text('Message sent successfully.');
            }
        });
    }
}

isNotEmpty = (caller) => {
    if (caller.val() == '') {
        caller.css('border', '1px solid red');
        return false;
    } else {
        caller.css('border', '');
        return true;
    }
}*/
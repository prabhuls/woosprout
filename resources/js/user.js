import './bootstrap';
import './elements/turbo-echo-stream-tag';
import './libs';

import Alpine from 'alpinejs';
import $ from 'jquery';
import parsley from 'parsleyjs';

window.Alpine = Alpine;

Alpine.start();

$(function() {
    $('#signupForm', '#loginForm', '#forgotPassForm').on('submit', function(e) {
        e.preventDefault();
    
        if ($(this).parsley().isValid()) {
          return true;
        }
      });

    $('#signupForm input').on('blur', function() {
      $(this).parsley().validate();
    });
});
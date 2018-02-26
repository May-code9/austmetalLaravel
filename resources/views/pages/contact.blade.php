@extends('master')
@section('title')
Ausmetal | Contact Us
@endsection
@section('meta')
<meta name='description' content='we make custom fabricated gate, hand rails, fence rails at Austmetal, Port Harcourt, Nigeria'/>
@endsection
@section('content')
<section id="section-content" class="content page-13 moto-section" data-widget="section" data-container="section">
  <div class="moto-widget moto-widget-container moto-container_content_586142c01" data-widget="container" data-container="container" data-css-name="moto-container_content_586142c01">
    <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="row" data-spacing="lala">
      <div class="container-fluid">
        <div class="row">
          <div class="moto-cell col-sm-12" data-container="container">
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa">
              <div class="moto-widget-text-content moto-widget-text-editable">
                <p style="text-align: center;" class="moto-text_system_4">Contact form<br></p>
              </div>
            </div>
            <div data-widget-id="wid__contact_form__58abf0946babd" class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-preset="default" data-widget="contact_form" data-spacing="saaa">
              <div ng-controller="widget.ContactForm.Controller" ng-init="hash = '1@NzX2XdzvK7UPEnwGGBTCJZcjMIHRPPFKa/qNXXFRx1Mku3sQmfTf48UoUqB8C/Rj5VFldO9nZ3XXC8eWIMioNbiToeOxk/SVe2VwdMC0QVv7aBmKYoxK8iwIyQMnv03cC8z1xMI9iazWDwtESkpO0xrve44ym1JD2UbUR5u1jJk='">
                <form class="moto-widget-contact_form-form" role="form" name="contactForm" ng-submit="submit()" novalidate>
                  <div ng-show="sending" class="contact-form-loading"></div>
                  <div class="moto-widget-contact_form-group">
                    <label for="field_name" class="moto-widget-contact_form-label">Name:</label>
                    <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Name: *"  ng-blur="validate('name')" required  ng-model-options="{ updateOn: 'blur' }" name="name" id="field_name" ng-model="message.name"/>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.name.$invalid && !contactForm.name.$pristine && !contactForm.name.emailInvalid" >Field is required</span>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.name.emailInvalid && !contactForm.name.$pristine" >Incorrect email</span>
                  </div>
                  <div class="moto-widget-contact_form-group">
                    <label for="field_email" class="moto-widget-contact_form-label">Email:</label>
                    <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Email: *"  ng-blur="validate('email')" required  ng-model-options="{ updateOn: 'blur' }" name="email" id="field_email" ng-model="message.email"/>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.email.$invalid && !contactForm.email.$pristine && !contactForm.email.emailInvalid" >Field is required</span>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.email.emailInvalid && !contactForm.email.$pristine" >Incorrect email</span>
                  </div>
                  <div class="moto-widget-contact_form-group">
                    <label for="field_phone" class="moto-widget-contact_form-label">Phone:</label>
                    <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Phone: "  ng-model-options="{ updateOn: 'blur' }" name="phone" id="field_phone" ng-model="message.phone"/>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.phone.$invalid && !contactForm.phone.$pristine && !contactForm.phone.emailInvalid" >Field is required</span>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.phone.emailInvalid && !contactForm.phone.$pristine" >Incorrect email</span>
                  </div>
                  <div class="moto-widget-contact_form-group">
                    <label for="field_message" class="moto-widget-contact_form-label">Message:</label>
                    <textarea class="moto-widget-contact_form-field moto-widget-contact_form-textarea" rows="3" placeholder="Message: *"  ng-blur="validate('message')" required  ng-model-options="{ updateOn: 'blur' }" name="message" id="field_message" ng-model="message.message"></textarea>
                    <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.message.$invalid && !contactForm.message.$pristine" >Field is required</span>
                  </div>
                  <div class="moto-widget-contact_form-success ng-cloak" ng-cloak ng-show="emailSent">Your message was sent successfully</div>
                  <div class="moto-widget-contact_form-danger ng-cloak" ng-cloak ng-show="emailError">Sorry, your message was not sent</div>
                  <div class="moto-widget-contact_form-buttons">
                    <div class="moto-widget moto-widget-button moto-preset-2 moto-align-center" data-preset="2" data-align="center">
                      <a ng-click="submit();" class="moto-widget-button-link moto-size-medium" data-size="medium">
                        <span class="fa moto-widget-theme-icon"></span>
                        <span class="moto-widget-button-label">SEND</span>
                      </a>
                    </div>
                    <button type="submit" class="hidden"></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
@endsection

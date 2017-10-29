describe('CA MSF Raffle UI Test - cdbu.io Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://preprod.cdbu.io');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User3');
    element(by.buttonText('I\'m In!')).click();
    });
});

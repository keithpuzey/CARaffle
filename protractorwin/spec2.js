describe('CA MSF Raffle UI Test - win.cdbu.io Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://win-preprod.cdbu.io');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('I\'m In!')).click();
    });
});

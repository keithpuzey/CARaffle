describe('CA MSF CDBU Raffle UI Test', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://CARaffle3.us-east-1.elasticbeanstalk.com');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User');
    element(by.buttonText('I\'m In!')).click();
    });
});

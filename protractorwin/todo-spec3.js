
describe('CA MSF Raffle UI Test - Win Environment', function() {
  it('should add a todo', function() {
    browser.ignoreSynchronization = true;
    browser.get('http://win-preprod.us-east-1.elasticbeanstalk.com/index.php');
    element(by.css('[name="name"]')).sendKeys('Selenium Test User3');
    element(by.buttonText('I\'m In!')).click();
    });
});

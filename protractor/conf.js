exports.config = {
  seleniumAddress: 'http://localhost:4444/wd/hub',
  baseUrl: 'http://caraffle3.us-east-1.elasticbeanstalk.com/',
  specs: ['spec.js'],
    multiCapabilities: [{browserName: 'chrome'}, {browserName: 'firefox'}, {tunnel-identifier: process.env.TRAVIS_JOB_NUMBER}, {build: 52},
{name: 'CA Raffle Test'}]  
  
  onPrepare: function(){
    browser.driver.get('http://caraffle3.us-east-1.elasticbeanstalk.com/');
    element(by.linkText('About')).click();
    element(by.linkText('Home')).click();
    element(by.linkText('About')).click();
    element(by.linkText('Home')).click();
    element(by.css('[name="Name"]')).sendKeys('Keith 123');
    element(by.buttonText('Enter Raffle')).click();
  }
}

1 To run tests
 - if you use Selenium, launch Selenium Server: java -jar selenium-server-standalone-2.39.0.jar
 - type: php codecept.phar run [suite, i.e. acceptance] [filename, i.e. FirsttestCest.php]

2 You can run tests either with fast PhpBrowser or with slow (but more visual) Selenium.
  To change run engine comment/uncomment corresponding lines in test/acceptance.suite.yml

3 Database configuration - in codeception.yml


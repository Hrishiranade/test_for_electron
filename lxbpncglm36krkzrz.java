// This sample code supports Appium Java client >=9
// https://github.com/appium/java-client
import io.appium.java_client.remote.options.BaseOptions;
import io.appium.java_client.android.AndroidDriver;
import java.net.URL;
import java.time.Duration;
import java.util.Arrays;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.*;

public class SampleTest {

  private AndroidDriver driver;

  @Before
  public void setUp() {
    var options = new BaseOptions()
      .amend("platformName", "Android")
      .amend("appium:deviceName", "Pixel 8 API 30")
      .amend("appium:app", "C:\\Users\\Hrishikesh\\Katalon Studio\\test android 1\\androidapp\\APIDemos.apk")
      .amend("appium:ensureWebviewsHavePages", true)
      .amend("appium:nativeWebScreenshot", true)
      .amend("appium:newCommandTimeout", 3600)
      .amend("appium:connectHardwareKeyboard", true);

    private URL getUrl() {
      try {
        return new URL("http://localhost:4723/wd/hub");
      } catch (MalformedURLException e) {
        e.printStackTrace();
      }
    }

    driver = new AndroidDriver(this.getUrl(), options);
  }

  @Test
  public void sampleTest() {
    var el1 = driver.findElement(AppiumBy.accessibilityId("App"));
    el1.click();
  }

  @After
  public void tearDown() {
    driver.quit();
  }
}

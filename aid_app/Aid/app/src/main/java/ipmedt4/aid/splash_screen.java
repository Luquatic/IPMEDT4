package ipmedt4.aid;

import android.content.Intent;
import android.graphics.Typeface;
import android.os.Handler;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Window;
import android.widget.TextView;

import org.w3c.dom.Text;

public class splash_screen extends AppCompatActivity {
    private static int SPLASH_TIME_OUT = 3500;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);

        // method to hide actionbar from activity
        ActionBar actionBar = getSupportActionBar();
        actionBar.hide();

        // creating textviews and custom fonts
        TextView app_name = (TextView) findViewById(R.id.appName);
        TextView loading = (TextView) findViewById(R.id.loading_text);

        // initializing the custom font
        Typeface RalewayRegular = Typeface.createFromAsset(getAssets(), "fonts/Raleway-Regular.ttf");

        app_name.setTypeface(RalewayRegular);
        loading.setTypeface(RalewayRegular);

        // handler for splashscreen (redirects splashscreen to webview activity after 3500 seconds
        new Handler().postDelayed(new Runnable(){
            @Override
            public void run() {
                Intent homeIntent = new Intent(splash_screen.this, webview_activity.class);
                startActivity(homeIntent);
                finish();
            }
        }, SPLASH_TIME_OUT);


    }
}

package ipmedt4.aid;

import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;

public class webview_activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_webview_activity);

        //method to hide actionbar from activityview
        ActionBar actionBar = getSupportActionBar();
        actionBar.hide();

        final WebView webviewer = (WebView) findViewById(R.id.aid_webview);
        webviewer.setWebViewClient(new WebViewClient());

        webviewer.loadUrl("http://www.google.com/");

        FloatingActionButton return_button = (FloatingActionButton) findViewById(R.id.back_button);

        return_button.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                if (webviewer.canGoBack())
                {
                    webviewer.goBack();
                }

            }
        });
    }
}

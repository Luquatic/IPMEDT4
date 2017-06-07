package ipmedt4.aid;

import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;

public class webview_activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_webview_activity);

        // method to hide actionbar from activityview
        ActionBar actionBar = getSupportActionBar();
        actionBar.hide();

        // initializing webview
        final WebView webviewer = (WebView) findViewById(R.id.aid_webview);

        //setting it as webview client (so it doesn't redirect to default phone browser)
        webviewer.setWebViewClient(new WebViewClient());

        // url to load in webview
        webviewer.getSettings().setJavaScriptEnabled(true);
        webviewer.loadUrl("http://www.kasperdevries.nl/");

        // custom return button to go back one page
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

        // allow system return button to go back one page
        webviewer.setOnKeyListener(new View.OnKeyListener()
        {
            @Override
            public boolean onKey(View v, int keyCode, KeyEvent event)
            {
                if(event.getAction() == KeyEvent.ACTION_DOWN)
                {
                    switch(keyCode)
                    {
                        case KeyEvent.KEYCODE_BACK:
                            if(webviewer.canGoBack())
                            {
                                webviewer.goBack();
                                return true;
                            }
                            break;
                    }
                }
                return false;
            }
        });

        // custom chat button
        FloatingActionButton chat_button = (FloatingActionButton) findViewById(R.id.chat_button);
        chat_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(webview_activity.this, chat_activity.class));
            }
        });
    }
}

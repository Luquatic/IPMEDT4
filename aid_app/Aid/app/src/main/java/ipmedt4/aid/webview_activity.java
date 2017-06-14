package ipmedt4.aid;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.preference.PreferenceManager;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.KeyEvent;
import android.view.View;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class webview_activity extends AppCompatActivity {
    private String patient_name;
    public static final String USERNAME = "user_name";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_webview_activity);

        // method to hide actionbar from activityview
        final ActionBar actionBar = getSupportActionBar();
        actionBar.hide();

        // get sharedpreferences file
        SharedPreferences settings = getSharedPreferences(USERNAME, 0);
        boolean askedForName = settings.getBoolean("askedforname", false);

        //checks if asked for name, if not, show info dialog and name enter dialog
        if (!askedForName) {
            SharedPreferences.Editor edit_dialog = settings.edit();
            show_app_info();

            // set boolean for dialog to true
            edit_dialog.putBoolean("askedforname", true);
            edit_dialog.commit();
        }

        // initializing webview
        final WebView webviewer = (WebView) findViewById(R.id.aid_webview);

        //setting it as webview client (so it doesn't redirect to default phone browser)
        webviewer.setWebViewClient(new WebViewClient());

        // url to load in webview
        webviewer.getSettings().setJavaScriptEnabled(true);
        webviewer.loadUrl("http://kasperdevries.nl/");

        String url =  webviewer.getUrl();;
        String afdeling =  url.substring(url.lastIndexOf("/")+1);
        Log.d("afdeling", afdeling);
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
                Context context = getApplicationContext();
                Intent chatIntent = new Intent(webview_activity.this, ChatRoom.class);
                String url =  webviewer.getUrl();;
                String afdeling =  url.substring(url.lastIndexOf("/")+1);
                String gebruiker = PreferenceManager.getDefaultSharedPreferences(context).getString("patient_name", patient_name);
                if (afdeling.isEmpty())  {
                    startActivity(new Intent(webview_activity.this, chat_activity.class));
                }
                else {

                    chatIntent.putExtra("Afdeling", afdeling);
                    chatIntent.putExtra("Gebruiker", gebruiker);
                    startActivity(chatIntent);

                }

            }
        });
    }

    // alertdialog that shows app information
    public void show_app_info() {
        AlertDialog.Builder infobuilder = new AlertDialog.Builder(this);
        infobuilder.setCancelable(false);
        infobuilder.setTitle("Welkom bij Aid!");
        infobuilder.setMessage("Hier kun je de status van je afspraak volgen alsmede chatten met patiënten van verschillende afdelingen.");
        final TextView text = new TextView(this);
        // action when pressed OK
        infobuilder.setPositiveButton("Ga door", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                dialog.cancel();
                // get student name to personalize app
                request_user_name();
            }
        });

        infobuilder.show();
    }

    // User needs to give a user name
    private void request_user_name() {
        // make dialog box
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setCancelable(false);
        builder.setTitle("Geef een gebruikersnaam die je wilt gebruiken in de chats:");
        final EditText namefield = new EditText(this);
        builder.setView(namefield);


        //action when name entered and "Ga door" pressed
        builder.setPositiveButton("Ga door", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int i) {
                Context context = getApplicationContext();
                if (namefield.getText().toString().trim().length() < 1) {
                    Toast.makeText(context, "Geef een gebruikersnaam op", Toast.LENGTH_SHORT).show();
                    request_user_name();
                }
                else {
                    patient_name = namefield.getText().toString();
                    // store name in sharedpreferences
                    PreferenceManager.getDefaultSharedPreferences(context).edit().putString("patient_name", patient_name).commit();
                }

            }
        });



        builder.show();
    }
}

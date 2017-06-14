package ipmedt4.aid;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Typeface;
import android.preference.PreferenceManager;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Set;

public class chat_activity extends AppCompatActivity {

    // variable to access root of firebase database
    private DatabaseReference root = FirebaseDatabase.getInstance().getReference().getRoot();

    // declaring variables private for class
    private ListView room_names;
    private ArrayAdapter room_adapter;
    private ArrayList<String> roomList = new ArrayList<>();
    private String patient_name;

    // shared preferences variable
    public static final String USERNAME = "user_name";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chat_activity);
        setTitle("Chats");

        // enable back button in actionbar
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        // get sharedpreferences file
        SharedPreferences settings = getSharedPreferences(USERNAME, 0);



        // listview for room names
        room_names = (ListView) findViewById(R.id.room_list);

        // arrayadapter for room_names listview
        room_adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, roomList);
        room_names.setAdapter(room_adapter);

        // make app request database rooms for chat
        root.addValueEventListener(new ValueEventListener() {
        @Override
        public void onDataChange(DataSnapshot dataSnapshot) {
            // iterate through root children

            Iterator i = dataSnapshot.getChildren().iterator();
            Set<String> set = new HashSet<String>();


            while (i.hasNext()) {
                set.add(((DataSnapshot)i.next()).getKey());
            }
            roomList.clear();
            roomList.addAll(set);
            room_adapter.notifyDataSetChanged();
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
            });

        // listener to go to desired room
        room_names.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                Context context = getApplicationContext();

                // intent to switch to room
                Intent intent = new Intent(getApplicationContext(), ChatRoom.class);

                //final patient name
                String final_patient_name = PreferenceManager.getDefaultSharedPreferences(context).getString("patient_name", patient_name);

                // give username and room name to intent
                intent.putExtra("Afdeling", ((TextView)view).getText().toString());
                intent.putExtra("Gebruiker", final_patient_name);
                startActivity(intent);
            }
        });

    }



}
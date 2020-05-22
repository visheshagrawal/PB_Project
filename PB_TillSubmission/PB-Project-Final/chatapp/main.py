from flask import Flask, render_template
from flask_socketio import SocketIO

app = Flask(__name__)
app.config['SECRET_KEY'] = 'vnkdjnfjknfl1232#'
socketio = SocketIO(app)

@app.route('/')
def sessions():
    global Unpaired_people
    global All_username_pairs
    return render_template('session.html')

def messageReceived(methods=['GET', 'POST']):
    global Unpaired_people
    global All_username_pairs
    print('message was received!!!')

@socketio.on('my event')
def handle_my_custom_event(json, methods=['POST']):
    global Unpaired_people
    global All_username_pairs
    print('received my event: ' + str(json))
    
    this_user = json["username"]
    
    if(len(Unpaired_people)==1):
        unpaired_person = Unpaired_people[0]
        Unpaired_people = []

        All_username_pairs[unpaired_person] = this_user
        All_username_pairs[this_user] = unpaired_person
    
    else:
        Unpaired_people.append(this_user)


        print(Unpaired_people)
        print(All_username_pairs)

@socketio.on('chat')
def chatwith(json, methods=["POST"]):
    global Unpaired_people
    global All_username_pairs
    msg = {}
    msg["to"] = All_username_pairs[json["secretKey"]]
    msg["from"] = json["user_name"]
    msg["message"] = json["message"]
    socketio.emit('my response', msg)


if __name__ == '__main__':

    All_username_pairs = {}
    Unpaired_people = []

    socketio.run(app, debug=True)

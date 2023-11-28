pipeline {
    agent any

    stages {
        stage('Prepare') {
            steps {
                // Checkout code into a directory and initialize a Git repository
                dir('/home/ubuntu/theti') {
                    git url: 'https://github.com/alexdoe99/theti.git'
                }
            }
        }

        stage('Build and Deploy') {
            steps {
                // Run docker-compose up --build -d
                sh 'cd /home/ubuntu/theti && docker-compose up --build -d'
            }
        }
    }
}

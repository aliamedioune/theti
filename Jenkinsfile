pipeline {
    agent any

    stages {
        stage('Prepare') {
            steps {
                // Go to the specified directory
                dir('/home/ubuntu/theti') {
                    // Pull from the master branch of your repository
                    git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
                }
            }
        }

        stage('Build and Deploy') {
            steps {
                // Run docker-compose up --build -d
                sh 'docker-compose up --build -d'
            }
        }
    }
}
